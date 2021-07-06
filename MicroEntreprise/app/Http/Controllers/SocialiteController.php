<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
  protected $providers = [ "google" ];

  # La vue pour les liens vers les providers
  public function loginRegister () {
    return view("socialite.login-register");
  }

  # redirection vers le provider
  public function redirect (Request $request) {

      $provider = $request->provider;

      // On vérifie si le provider est autorisé
      if (in_array($provider, $this->providers)) {
          return Socialite::driver($provider)->stateless()->redirect(); // On redirige vers le provider
      }
      abort(404); // Si le provider n'est pas autorisé
  }

  // Callback du provider
  public function callback (Request $request) {

    $provider = $request->provider;

    if (in_array($provider, $this->providers)) {

      // Les informations provenant du provider
        $data = Socialite::driver($request->provider)->stateless()->user();

        # Social login - register

        $email = $data->getEmail(); // L'adresse email
        $name = $data->getName(); // le nom
        $avatar =  $data->getAvatar();
        # 1. On récupère l'utilisateur à partir de l'adresse email
        $user = User::where("email", $email)->first();

        # 2. Si l'utilisateur existe
        if (isset($user)) {

            // Mise à jour des informations de l'utilisateur
            $user->name = $name;
            $user->avatar = $avatar;
            $user->save();

        # 3. Si l'utilisateur n'existe pas, on l'enregistre
        } else {

            // Enregistrement de l'utilisateur
            $user = User::create([
                'name' => $name,
                'email' => $email,
                'avatar' => $data->getAvatar(),
                'password' => bcrypt("emilie") // On attribue un mot de passe
            ]);
        }

        # 4. On connecte l'utilisateur
        auth()->login($user);

        # 5. On redirige l'utilisateur vers /home
        if (auth()->check()) return redirect(route('organisation.index'));

     }
     abort(404);
}
}

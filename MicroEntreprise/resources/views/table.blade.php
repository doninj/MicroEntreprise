<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
        <table>
          <thead>
              <tr>
                  <th>  id </th>
                  <th> name</th>
                  <th> email </th>
                  <th> phone</th>
                  <th> adddress </th>
              </tr>
          </thead>
          <tbody>
               @foreach($organisation as $organisation)
                <tr>
                    <td> {{$organisation->id}} </td>
                    <td> {{$organisation->name}} </td>
                    <td> {{$organisation->email}} </td>
                    <td> {{$organisation->tel}} </td>
                    <td> {{$organisation->address}} </td>
                </tr>
               @endforeach
         </tbody>
      </table>
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
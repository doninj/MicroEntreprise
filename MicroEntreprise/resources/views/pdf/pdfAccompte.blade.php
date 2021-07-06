<!DOCTYPE html>
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<style>
    @page {
            margin: 0px 0px 0px 0px !important;
            padding: 0px 0px 0px 0px !important;
        }
</style>
<title>Ma page</title>
</head>
<div class="container">
  <div class="row">
              <!-- BEGIN INVOICE -->
            <div class="col-xs-12">
              <div class="grid invoice">
                <div class="grid-body">
                  <div class="invoice-title">
                    <div class="row">
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-xs-12">
                        <h2>Facture d'accompte <br>
                        <span class="small">{{ $mission->reference }}-FA-A</span></h2>
                      </div>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-xs-6">
                      <address>
                        <strong>{{ $user->name }}</strong><br>
                        <abbr title="Addr">adresse:</abbr> {{ $user->address }}<br>
                        <abbr title="Phone">Tél::</abbr> {{ $user->phone }}
                      </address>
                    </div>
                    <div class="col-xs-6 text-right">
                      <address>
                        <strong>Shipped To:</strong><br>
                        {{ $orga->name }}<br>
                        {{ $orga->address }}<br>
                      </address>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-6">
                      <address>
                        <strong>Méthode de paiement:</strong><br>
                        {{ $mission->deposit }} % de l'accompte à la signature<br>
                      </address>
                    </div>
                    <div class="col-xs-6 text-right">
                      <address>
                        <strong>Date de création</strong><br>
                        17/06/14
                      </address>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <p>{{ $mission->name }}</p>
                      <table class="table table-striped">
                        <thead>
                          <tr class="line">
                            <td><strong>No</strong></td>
                            <td class="text-right"><strong>Titre</strong></td>
                            <td class="text-right"><strong>Quantité</strong></td>
                            <td class="text-right"><strong>Prix <br>TTC</strong></td>
                            <td class="text-right"><strong>Total <br>TTC</strong></td>
                          </tr>
                        </thead>
                        <tbody>
                          @if (count($mission->missionLine) > 0)
    @foreach ($mission->missionLine as $key => $missionLine)
        <tr class="line">
            <td class="text-right">{{ ++$key }}</td>
            <td class="text-right">{{ $mission->title }}</td>
            <td class="text-right"> {{ $mission->deposit }} %</td>
            <td class="text-right"> {{ $missionLine->total}} €</td>
            <td class="text-right"> {{$missionLine->total * $mission->deposit /100 }} €</td>
        </tr>
    @endforeach
@endif
                            <td colspan="3">
                            </td><td class="text-right"><strong>Total</strong></td>
                            <td class="text-right"><strong>{{$total}} €</strong></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 text-right identity">
                      <p><strong>Signature:</strong></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- END INVOICE -->
          </div>
  </div>
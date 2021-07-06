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
                        <h2>invoice<br>
                        <span class="small">order #1082</span></h2>
                      </div>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-xs-6">
                      <address>
                        <strong>{{ $user->name }}</strong><br>
                        <abbr title="Addr">addr:</abbr> {{ $user->address }}<br>
                        <abbr title="Phone">Tél:</abbr> {{ $user->phone }}
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
                        <strong>Payment Method:</strong><br>
                        {{ $mission->deposit }} % of deposit at sign<br>
                      </address>
                    </div>
                    <div class="col-xs-6 text-right">
                      <address>
                        <strong>Order Date:</strong><br>
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
                            <td class="text-right"><strong>Title</strong></td>
                            <td class="text-right"><strong>Quantity</strong></td>
                            <td class="text-right"><strong>Price</strong></td>
                            <td class="text-right"><strong>unity</strong></td>
                            <td class="text-right"><strong>Total <br> TTC</strong></td>
                          </tr>
                        </thead>
                        <tbody>
                          @if (count($mission->missionLine) > 0)
    @foreach ($mission->missionLine as $key => $missionLine)
        <tr class="line">
            <td class="text-right">{{ ++$key }}</td>
            <td class="text-right">{{ $missionLine->title }}</td>
            <td class="text-right">{{ $missionLine->quantity }}</td>
            <td class="text-right">{{ $missionLine->price }} €</td>
            <td class="text-right">{{ $missionLine->unity }}</td>
            <td class="text-right"> {{ $missionLine->total}} €</td>
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
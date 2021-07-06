<!DOCTYPE html>
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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
                      <div class="col-xs-12">
                        <img src="http://vergo-kertas.herokuapp.com/assets/img/logo.png" alt="" height="35">
                      </div>
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
                        <strong>Billed To:</strong><br>
                        Twitter, Inc.<br>
                        795 Folsom Ave, Suite 600<br>
                        San Francisco, CA 94107<br>
                        <abbr title="Phone">P:</abbr> (123) 456-7890
                      </address>
                    </div>
                    <div class="col-xs-6 text-right">
                      <address>
                        <strong>Shipped To:</strong><br>
                        Elaine Hernandez<br>
                        P. Sherman 42,<br>
                        Wallaby Way, Sidney<br>
                        <abbr title="Phone">P:</abbr> (123) 345-6789
                      </address>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-6">
                      <address>
                        <strong>Payment Method:</strong><br>
                        Visa ending **** 1234<br>
                        h.elaine@gmail.com<br>
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
                      <h3>ORDER SUMMARY</h3>
                      <table class="table table-striped">
                        <thead>
                          <tr class="line">
                            <td><strong>No</strong></td>
                            <td class="text-center"><strong>Title</strong></td>
                            <td class="text-center"><strong>Quantity</strong></td>
                            <td class="text-right"><strong>Price</strong></td>
                            <td class="text-right"><strong>Total</strong></td>
                          </tr>
                        </thead>
                        <tbody>
                          @if (count($mission->missionLine) > 0)
    @foreach ($mission->missionLine as $key => $missionLine)
        <tr>
            <td>{{ ++$key }}</td>
            <td>{{ $missionLine->title }}</td>
            <td>{{ $missionLine->quantity }}</td>
            <td>{{ $missionLine->price }}</td>
            <td>{{ $missionLine->unity }}</td>
            <td> {{ $missionLine->total}}</td>
        </tr>
    @endforeach
@endif
                            <td colspan="3">
                            </td><td class="text-right"><strong>Total</strong></td>
                            <td class="text-right"><strong>{{$total}}</strong></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 text-right identity">
                      <p>Designer identity<br><strong>Jeffrey Williams</strong></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- END INVOICE -->
          </div>
  </div>
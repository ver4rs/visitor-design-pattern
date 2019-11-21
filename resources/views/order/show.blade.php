<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>The Composite Pattern - Workshop</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('style.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container">
    <div class="position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                <small>
                    Order details
                </small>
            </div>
        </div>
        <div>
            <div class="order-info">
                <dl>
                    <dt>Name:</dt>
                    <dd>{{ $order->getUser()->getName() }}</dd>

                    <dt>E-mail:</dt>
                    <dd>{{ $order->getUser()->getEmail() }}</dd>

                    <dt>Created At:</dt>
                    <dd>{{ $order->getFormattedDate() }}</dd>
                </dl>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Code</th>
                        <th class="center">Product</th>
                        <th class="center">Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($order->getItems() as $item)
                        <tr>
                            <td>{{ $item->getCode() }}</td>
                            <td class="center">
                                {{ $item->getName() }}
                                @if(isset($benefitReport))
                                    <br>
                                    <p style="text-align: left;">
                                        @foreach($benefitReport as $key => $description)
                                            @if($key == $item->getCode())
                                                <small>+ {{ $description }}</small>
                                            @endif
                                            @if($loop->count > 1)
                                                <br>
                                            @endif
                                        @endforeach
                                    </p>
                                @endif
                            </td>
                            <td class="center">{{ $item->getPrice() }}EUR</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <span class="total-price">
                <strong>Total Price:</strong>
                {{ $order->getPrice() }}EUR
            </span>
        </div>
        <div class="form-wrapper">
            <a href="/">
                &laquo; Go back
            </a>
        </div>
    </div>
</div>
</body>
</html>

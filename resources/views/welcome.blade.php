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
                            The Visitor Pattern - Workshop
                        </small>
                    </div>
                </div>
                <div>
                    <h3>Application</h3>
                    <p>
                        Our application displays one specific Order from our E-shop, listing all the products and the total price of the Order.
                    </p>
                    <p>
                        The application is not connected to any Database, it is using a dummy repository to grab the Order and it's items. The current database for the Orders
                        is configured in the <strong>AppServiceProvider</strong>.
                    </p>
                    <p>
                        Through our E-shop we can order simple Products and called Gift Boxes, which can contain any number of products or smaller gift boxes. Currently, the Gift Box
                        has a fixed price, but it should be an optional thing.
                        <br>
                        Please keep in mind, our application currently supports <string>int</string> values for Prices.
                    </p>

                    <h3>
                        The Task
                    </h3>

                    <p>
                        As currently the application it is working and our goal is implement the Visitor Design Pattern for special benefit's.
                    </p>
                    <p>
                        These week we have special deal for customers. We want to add new service "installation free" for TV and for each GiftBox lottery ticket.
                    </p>
                    <p>
                        Don't worry you have prepared interfaces "<em>\App\Visitor\Entity</em>" and "<em>\App\Visitor\Visitor</em>".
                    </p>
                    <p>
                        <strong>1.</strong> Implement the Visitor Design Pattern for add new behavior.
                    </p>

                    <p>
                        <strong>What do you need?</strong>
                        <ul>
                            <li>Each concrete element class (like Product and GiftBox class) need to implement another interface <em>\App\Visitor\Entity</em></li> and
                            <li>Create new Visitor class with new behavior for special benefits that's implement <em>\App\Visitor\Visitor</em> interface
                                <ul>
                                    <li><em><small>Hint:</small></em>: create private property inside Visitor object like code bellow
                                        <pre>
                                            <code>
                                                /** @var ReportBenefitsCollection $report */
                                                private $report;
                                            </code>
                                        </pre>
                                    </li>
                                    <li>Inject <em>BenefitProvider</em> to the Visitor object</li>
                                    <li>When for product or GiftBox exist any benefit then save it property</li>
                                </ul>
                            </li>
                        </ul>
                    </p>

                    <p>Good luck!</p>
                </div>
                <div>
                    <p class="center">
                        <a class="btn" href="{{ route('order.show', 123) }}">
                            Go to the Order
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>

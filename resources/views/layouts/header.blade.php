<html>
	<head>
        <title>Blokspecerijen</title>
		<link href='http://fonts.googleapis.com/css?family=Lato:100, 300, 400' rel='stylesheet' type='text/css'>
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        {!!HTML::style('css/app.css?v=1')!!}
	</head>
	<body>

    <nav class="nav-main">
        <div class="layout">
            <ul>
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">Assortiment</a>
                </li>
                <li>
                    <a href="#">Historie</a>
                </li>
                <li>
                    <a href="#">Fotogalerij</a>
                </li>
                <li>
                    <a href="#">Bestellen</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>

            <select class="language">
                <option selected value="nl">Nederlands</option>
                <option value="en">English</option>
                <option value="de">German</option>
            </select>
        </div>
    </nav>

    <header>
        <div class="layout">
            <h1>{!! link_to_route('home', 'Blokspecerijen',null, ['class' => 'logo']) !!}</h1>
            <div class="phone">
                <i class="fa fa-phone"></i>
                036-537 24 80
            </div>
        </div>
    </header>
    <nav class="nav-assortment">
        <ul>
            @foreach(range(1, 10, 1) as $index )
            <li><a href="#">Assortiment</a></li>
            @endforeach
        </ul>
        <select class="select-assortment">
            @foreach(range(1, 10, 1) as $index )
                @if( $index == 1)
                    <option selected value="assortiment">Kruiden</option>
                @endif
                <option value="assortiment">Assortiment</option>
            @endforeach
        </select>
    </nav>


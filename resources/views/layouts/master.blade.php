<!doctype html>
    <html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Aston Sanctuary- @yield('title')</title>

                    <!-- Fonts -->
                    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

                    <!-- Styles -->
                    <style>
                    /* Import website font */
            @import url('https://stockfont.org/?7af15d72f9cb1cf084af90df8639622875d1e9af65e9287e35298265c000ab8c');

            * {margin: 0; padding: 0;}

            nav ul ul {overflow: hidden; position: absolute; display: block; background-color: #333; width: 200px; margin-left: 20px; max-height: 0px; -webkit-transition: max-height 0.5s; transition: max-height 1s;}

            nav li:hover ul {  max-height: 500px;}
            nav ul ul li {float: none; width: auto; }

            html {font-family: 'Oxygen-Regular', times, verdana, sans-serif; }

            body {background-color: #fff;}
            header {background-color: #3d56e0d2
            ; color: white;

            height: 200px;

            }



            nav {width: 100%; background-color: #333; overflow: auto;}
            nav ul {width: 1000px; margin: auto; display: block; list-style-type: none;}
            nav ul li {width: 25%; float: left; overflow: auto; text-align: center;}
            nav a {color: white; padding-top: 10px; display: block; text-decoration: none;}

            header section {  display: block;}

            header h1 {font-weight: bold; font-style: italic;}


            h1 { font-size:4em; color: white; text-align: center; padding-top: 20px; text-shadow: 2px 2px 2px #000;}

            main {min-height: 50vh; background-color: #ddd; width: 70vw; display: block; margin: auto; box-shadow: 0px 0px 10px #888; color:#444;}

            main h2 {font-size:2em;}
            .home {padding: 5vw; width: 60vw;}

            p, li, h2 {margin-bottom: 1em;}
            ol {margin-left: 30px;}

            pre {margin-top: 20px;}
            code {background-color: #ccc;}
            pre code {display: block;}

            footer {
                background-color: #ccc; padding: 10px;
            }
			footer{
            	text-align: center;

        	}

            form {padding-top: 2em; margin-top: 2em; border-top: 1px solid #888;}
            form select, form label, form input, form textarea {float: left; width: 200px; padding: 10px; margin-top: 20px;}
            form label {clear: left;}
            textarea {height: 100px;}
            form input[type="text"], form input[type="password"], textarea {color: #999; font-family: verdana, sans-serif}
            input[type="submit"] {clear: both; margin-left: 220px; width: 220px;}

            section a {color: #444;}

            form select {width: 220px;}
            table {width: 100%; margin-top: 20px;}
            td {padding: 5px; border-bottom: 1px solid #333;}

            .jobs {list-style-type: none}
            .jobs strong {width: 150px; float:  left; clear: left;}
            .jobs p {width: 500px; float: left;}

            .jobs li {padding-top: 20px; padding-bottom: 20px; border-bottom: 2px solid #aaa; overflow: auto}
            .jobs a {float: right; clear: both;}

            img.shop {width: 800px;}

            .stock, .admin {display: table;}
            .stock > ul, .admin .left { width: 10vw; list-style-type: none; display: table-cell; padding: 10px; background-color: #555; margin: 0;}

            .stock .products, .admin .right {display: table-cell; padding: 20px;}

            .stock > ul a, .admin .left a {color: white; text-decoration: none;}

            table td input[type="submit"] {margin: 0; float: right; width: auto; padding: auto;}

            ul {margin-left: 2em;}

            body > img {display: block; width: 100%;}


            main {display: table;}
            main > article {display: table-cell; padding: 2em;}
            main > nav {display: table-cell; width: 20%; padding: 2em;}
            main > nav li {float: none; width: auto; text-align: left;}
            main > nav ul {width: auto;}
            </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>

    </head>
    <body>
       
        <header>
			<section>
				<h1>Aston Animal Sanctuary</h1>
			</section>
		</header>
    
        <nav>
			<ul>
				<li><a href="{{ url('/') }}">Home</a></li>
				<li><a href="{{ url('animals') }}">Animals</a></li>
				<li><a href="#">Admin</a>
					<ul>
						<li><a href="{{ route('login') }}">Login</a></li>
						<li><a href="{{ route('register') }}">Sign up / Register</a></li>
					</ul>
				</li>
				<li><a href="{{ url('/') }}">About US</a></li>
			</ul>
		</nav>
		
            
        <main>
			<!-- Delete the <nav> element if the sidebar is not required -->
			<nav>
            
				<ul>
					<li><a href="#">Welcome </a></li>
					<li><a href="#">To the Animal </a></li>
					<li><a href="#">Sanctuary</a></li>
				</ul>
			</nav>

			<article>
            <div class="container">
            
				<h2>Welcome</h2>
				<p>We assure you, you are going to find all the animals you need here</p>

				<ul>
					<li>We have</li>
					<li>Dogs</li>
					<li>Cats</li>
				</ul>


				<form>
					<p>Get in touch with us</p>

					<label>Name</label> <input type="text" />
					<label>Email</label> <input type="text" />
					<label>A little Info about yourself </label> <textarea></textarea>

					<input type="submit" name="submit" value="Submit" />
				</form>
                </div>
			</article>
		
        </main>
        <footer>
        &copy; Aston Animal Sanctuary 2021
		</footer>
        
    </body>
</html>

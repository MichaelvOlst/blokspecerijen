
    <footer>
        <div class="layout">
           @foreach(range(1, 3, 1) as $index)
               <section>
                    <h1>Informatie</h1>

                    <ul>
                        @foreach(range(1, 6, 1) as $index)
                            <li><a href="">Historie</a></li>
                        @endforeach
                    </ul>
               </section>
           @endforeach
        </div>
    </footer>
    {!! HTML::script('js/app.min.js') !!}
	</body>
</html>

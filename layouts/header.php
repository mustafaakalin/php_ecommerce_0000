<?php


$dsn = "pgsql:host=localhost;port=5432;dbname=myphpEcommerceProjectPostgresqlDB";
$username = "mustafa";
$password = "";

try {
    $db = new PDO($dsn, $username, $password);
    // echo "Connected successfully";
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}


?>

<div class="navbar bg-white bg-opacity-60 dark:bg-cyan-500 light:text-black dark:text-white dark:bg-opacity-60 rounded-md backdrop-blur-sm shadow-md sticky top-0 z-10">
    <div class="navbar-start">
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                </svg>
            </div>
            <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                <li><a>Homepage</a></li>
                <li><a>Portfolio</a></li>
                <li><a>About</a></li>
            </ul>
        </div>
    </div>
    <div class="navbar-center">
        <a class="btn btn-ghost text-xl"><img src="https://3nkitapkirtasiye.com/images/logo/906257717870-65-3167306222021-969-910208304412-412-3n.png" alt="" class="rounded-md w-8 md:w-20"></a>
    </div>
    <div class="navbar-end">
        <button class="btn btn-ghost btn-circle">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </button>
        <button class="btn btn-ghost btn-circle">
            <div class="indicator">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                </svg>
                <span class="badge badge-xs badge-primary indicator-item"></span>
            </div>
        </button>

        <div class="dropdown dropdown-end">
            <div tabindex="0" role="button" class="btn">
                Theme
                <svg width="12px" height="12px" class="h-2 w-2 fill-current opacity-60 inline-block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2048 2048">
                    <path d="M1799 349l242 241-1017 1017L7 590l242-241 775 775 775-775z"></path>
                </svg>
            </div>
            <ul tabindex="0" class="dropdown-content z-[1] shadow-2xl bg-base-300  text-base-content rounded-box top-px h-[28.6rem] max-h-[calc(100vh-10rem)] w-56 overflow-y-auto border border-white/5  outline outline-1 outline-black/5 mt-16">
                <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Light" value="light" />
                </li>
                <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Dark" value="dark" />
                </li>
                <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Cupcake" value="cupcake" /></li>
                <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Bumblebee" value="bumblebee" /></li>

                <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Emerald" value="emerald" /></li>
                <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Corporate" value="corporate" /></li>
                <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Synthwave" value="synthwave" /></li>
                <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Retro" value="retro" /></li>
                <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Cyberpunk" value="cyberpunk" /></li>
                <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Valentine" value="valentine" /></li>
                <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Halloween" value="halloween" /></li>
                <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Garden" value="garden" /></li>

                <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Forest" value="forest" /></li>

                <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Aqua" value="aqua" /></li>

                <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Lofi" value="lofi" /></li>

                <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Pastel" value="pastel" /></li>

                <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Fantasy" value="fantasy" /></li>

                <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Wireframe" value="wireframe" /></li>

                <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Black" value="black" /></li>

                <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Luxury" value="luxury" /></li>

                <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Dracula" value="dracula" /></li>

                <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Cmyk" value="cmyk" /></li>

                <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Autumn" value="autumn" /></li>

                <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Business" value="business" /></li>

                <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Acid" value="acid" /></li>

                <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Lemonade" value="lemonade" /></li>

                <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Night" value="night" /></li>

                <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Coffee" value="coffee" /></li>

                <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Winter" value="winter" /></li>

                <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Dim" value="dim" /></li>

                <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Nord" value="nord" /></li>

                <li><input type="radio" name="theme-dropdown" class="theme-controller btn btn-sm btn-block btn-ghost justify-start" aria-label="Sunset" value="sunset" /></li>

            </ul>
        </div>
    </div>
</div>

<!-- kategoriler header navbar -->
<div class="navbar bg-white bg-opacity-60 dark:bg-cyan-500 light:text-black dark:text-white dark:bg-opacity-60 rounded-md backdrop-blur-sm shadow-md">
    <ul class="overflow-x-scroll">
        <li>

            <div class="dropdown dropdown-hover">
                <a href="#" class="btn btn-ghost btn-sm rounded-btn">Kategori 1</a>


                <ul class="menu  dropdown-content  xl:menu-horizontal  lg:min-w-max bg-base-200 backdrop-blur-3xl rounded-box">
                    <li>
                        <a>Solutions</a>
                        <ul>
                            <li><a>Design</a></li>
                            <li><a>Development</a></li>
                            <li><a>Hosting</a></li>
                            <li><a>Domain register</a></li>
                        </ul>
                    </li>
                    <li>
                        <a>Enterprise</a>
                        <ul>
                            <li><a>CRM software</a></li>
                            <li><a>Marketing management</a></li>
                            <li><a>Security</a></li>
                            <li><a>Consulting</a></li>
                        </ul>
                    </li>
                    <li>
                        <a>Products</a>
                        <ul>
                            <li><a>UI Kit</a></li>
                            <li><a>Wordpress themes</a></li>
                            <li><a>Wordpress plugins</a></li>
                            <li>
                                <a>Open source</a>
                                <ul>
                                    <li><a>Auth management system</a></li>
                                    <li><a>VScode theme</a></li>
                                    <li><a>Color picker app</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a>Company</a>
                        <ul>
                            <li><a>About us</a></li>
                            <li><a>Contact us</a></li>
                            <li><a>Privacy policy</a></li>
                            <li><a>Press kit</a></li>
                        </ul>
                    </li>
                </ul>


            </div>

        </li>

        <li>
            <a href="#" class="btn btn-ghost btn-sm rounded-btn">Kategori 2</a>
        </li>
        <li>
            <a href="#" class="btn btn-ghost btn-sm rounded-btn">Kategori 3</a>
        </li>
        <li>
            <a href="#" class="btn btn-ghost btn-sm rounded-btn">Kategori 4</a>
        </li>
        <li>
            <a href="#" class="btn btn-ghost btn-sm rounded-btn">Kategori 5</a>
        </li>
        <li>
            <a href="#" class="btn btn-ghost btn-sm rounded-btn">Kategori 6</a>
        </li>
        <li>
            <a href="#" class="btn btn-ghost btn-sm rounded-btn">Kategori 7</a>
        </li>
        <li>
            <a href="#" class="btn btn-ghost btn-sm rounded-btn">Kategori 8</a>
        </li>
        <li>
            <a href="#" class="btn btn-ghost btn-sm rounded-btn">Kategori 9</a>
        </li>
        <li>
            <a href="#" class="btn btn-ghost btn-sm rounded-btn">Kategori 10</a>
        </li>
        <li>
            <a href="#" class="btn btn-ghost btn-sm rounded-btn">Kategori 11</a>
        </li>
        <li>
            <a href="#" class="btn btn-ghost btn-sm rounded-btn">Kategori 12</a>
        </li>
        <li>
            <a href="#" class="btn btn-ghost btn-sm rounded-btn">Kategori 13</a>
        </li>
        <li>
            <a href="#" class="btn btn-ghost btn-sm rounded-btn">Kategori 14</a>
        </li>

    </ul>


</div>
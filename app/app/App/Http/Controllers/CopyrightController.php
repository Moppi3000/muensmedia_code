<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class CopyrightController extends Controller
{
    public const HEADER = "
.-----. _            .-----.                .-----.
`-. .-':_;           `-. .-'                `-. .-'
  : :  .-. .--.  _____ : : .--.   .--.  _____ : : .--.  .--.
  : :  : :'  ..':_____:: :' .; ; '  ..':_____:: :' .; :' '_.'
  :_;  :_;`.__.'       :_;`.__,_;`.__.'       :_;`.__.'`.__.'
        ";

    // Generated with  https://patorjk.com/software/taag/
    public const COPYRIGHT = "
   _____                       .__  _________                             .__       .__     __   
  /     \   ____ ______ ______ |__| \_   ___ \  ____ ______ ___.__._______|__| ____ |  |___/  |_ 
 /  \ /  \ /  _ \\____ \\____ \|  | /    \  \/ /  _ \\____ <   |  |\_  __ \  |/ ___\|  |  \   __\
/    Y    (  <_> )  |_> >  |_> >  | \     \___(  <_> )  |_> >___  | |  | \/  / /_/  >   Y  \  |  
\____|__  /\____/|   __/|   __/|__|  \______  /\____/|   __// ____| |__|  |__\___  /|___|  /__|  
        \/       |__|   |__|                \/       |__|   \/              /_____/      \/                                                                                                                                 
        ";

    static public function getCopyright(): string
    {
        return self::HEADER . self::COPYRIGHT;
    }

    static public function showCopyright(): Response
    {
        return response( self::getCopyright() )->header('Content-Type', 'text/plain');
    }
}

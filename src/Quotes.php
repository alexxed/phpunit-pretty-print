<?php

namespace RobinIngelbrecht\PHPUnitPrettyPrint;

class Quotes
{
    private const QUOTES = [
        'Every SQL statement that %NAME% codes has an implicit "COMMIT" in its end.',
        '%NAME% can write multi-threaded applications with a single thread.',
        '%NAME% is the only human being to display the Heisenberg uncertainty principle - you can never know both exactly where and how quickly he will roundhouse-kick you in the face.',
        '%NAME% insists on strongly-typed programming languages.',
        "%NAME% doesn't have disk latency because the hard drive knows to hurry the hell up.",
        'The class object inherits from %NAME%',
        '%NAME% does not code in cycles, he codes in strikes.',
        "If you Google search \"%NAME% getting his ass kicked\" you will generate zero results. It just doesn't happen.",
        "When %NAME% throws exceptions, it's across the room.",
        "%NAME% can't test for equality because he has no equal.",
        "Each hair in %NAME%'s beard contributes to make the world's largest DDOS.",
        "%NAME% doesn't use web standards as the web will conform to him.",
        '"It works on my machine" always holds true for %NAME%.',
        'Everybody thinks the Galaxy Note 7 is explosive. In fact it is only %NAME% who tries to send a WhatsApp message with a selfie to his fans.',
        "%NAME% doesn't need to use AJAX because pages are too afraid to postback anyways.",
        "%NAME% doesn't need sudo, he just types \"%NAME%\" before his commands.",
        '%NAME% can access the DB from the UI.',
        "%NAME%' programs never exit, they terminate.",
        'If %NAME% writes code with bugs, the bugs fix themselves.',
        'To %NAME%, everything contains a vulnerability.',
        "%NAME% doesn't use GUI, he prefers COMMAND line.",
        '%NAME% is currently suing myspace for taking the name of what he calls everything around you.',
        '%NAME% can write infinite recursion functions and have them return.',
        '%NAME% solved the halting problem.',
        "%NAME%'s log statements are always at the FATAL level.",
        "%NAME% doesn't need an OS.",
        '%NAME% invented the internet? just so he had a place to store his porn.',
        '%NAME% does infinit loops in 4 seconds.',
        "%NAME% doesn't do Burn Down charts, he does Smack Down charts.",
        "%NAME%'s first program was kill -9.",
        "%NAME%'s keyboard has the Any key.",
        "With %NAME% P = NP. There's no nondeterminism with %NAME% decisions.",
        '%NAME% breaks RSA 128-bit encrypted codes in milliseconds.',
        "No one has ever spoken during review of %NAME%' code and lived to tell about it.",
        'Project managers never ask %NAME% for estimations... ever.',
        '%NAME% protocol design method has no status, requests or responses, only commands.',
        '%NAME% went out of an infinite loop.',
        "%NAME% doesn't use Oracle, he is the Oracle.",
        '%NAME% does not need to know about class factory pattern. He can instantiate interfaces.',
        "%NAME% doesn't needs try-catch, exceptions are too afraid to raise.",
        '%NAME% can instantiate an abstract class.',
        'The %NAME% military unit was not used in the game Civilization 4, because a single %NAME% could defeat the entire combined nations of the world in one turn.',
        "MySpace actually isn't your space, it's %NAME%'s (he just lets you use it).",
        'All arrays %NAME% declares are of infinite size, because %NAME% knows no bounds.',
        '%NAME% does not need to type-cast. The %NAME%-Compiler sees through things. All the way down. Always.',
        "%NAME%'s beard can type 140 wpm.",
        "There is no Esc key on %NAME%' keyboard, because no one escapes %NAME%.",
        'No statement can catch the %NAME%Exception.',
        '%NAME% hosting is 101% uptime guaranteed.',
        '%NAME% is the ultimate mutex, all threads fear him.',
        '%NAME% programs do not accept input.',
        "A diff between your code and %NAME%'s is infinite.",
        "When %NAME% breaks the build, you can't fix it, because there is not a single line of code left.",
        "Google won't search for %NAME% because it knows you don't find %NAME%, he finds you.",
        "If you try to kill -9 %NAME%'s programs, it backfires.",
        '%NAME% can install iTunes without installing Quicktime.',
        "Don't worry about tests, %NAME%'s test cases cover your code too.",
        'Scientists have estimated that the energy given off during the Big Bang is roughly equal to 1CNRhK (%NAME% Roundhouse Kick).',
        'For %NAME%, NP-Hard = O(1).',
        'The only pattern %NAME% knows is God Object.',
        'All browsers support the hex definition #%NAME% for the colors black.',
        'The %NAME% Eclipse plugin made alien contact.',
        '%NAME% compresses his files by doing a flying round house kick to the hard drive.',
        "%NAME% originally appeared in the \"Street Fighter II\" video game, but was removed by Beta Testers because every button caused him to do a roundhouse kick. When asked about this glitch, Norris replied \"That's no glitch.\"",
        '%NAME% uses canvas in IE.',
        "%NAME% doesn't use reflection, reflection asks politely for his help.",
        '%NAME% writes code that optimizes itself.',
        '%NAME% can dereference NULL.',
        "%NAME% doesn't need a debugger, he just stares down the bug until the code confesses.",
        '%NAME% programs occupy 150% of CPU, even when they are not executing.',
        '%NAME% can solve the Towers of Hanoi in one move.',
        'When %NAME% is web surfing websites get the message "Warning: Internet Explorer has deemed this user to be malicious or dangerous. Proceed?".',
        '%NAME% can binary search unsorted data.',
        "%NAME% doesn't bug hunt as that signifies a probability of failure, he goes bug killing.",
        "%NAME% can retrieve anything from \/dev\/null.",
        '%NAME% can unit test entire applications with a single assert.',
        "%NAME% doesn't need garbage collection because he doesn't call .Dispose(), he calls .DropKick().",
        "%NAME%'s keyboard doesn't have a Ctrl key because nothing controls %NAME%.",
        "%NAME%'s programs can pass the Turing Test by staring at the interrogator.",
        '%NAME% can access private methods.',
        "%NAME%' Internet connection is faster upstream than downstream because even data has more incentive to run from him than to him.",
        '%NAME% can compile syntax errors.',
        '%NAME% knows the last digit of PI.',
        '%NAME% types with one finger. He points it at the keyboard and the keyboard does the rest.',
        '%NAME% burst the dot com bubble.',
        'No one has ever pair-programmed with %NAME% and lived to tell about it.',
        "%NAME% doesn't go on the internet, he has every internet site stored in his memory. He refreshes webpages by blinking.",
        "%NAME%'s OSI network model has only one layer - Physical.",
        "%NAME%'s database has only one table, 'Kick', which he DROPs frequently.",
        '%NAME% can spawn threads that complete before they are started.',
        '%NAME% finished World of Warcraft.',
        "%NAME% doesn't pair program.",
        "%NAME% solved the Travelling Salesman problem in O(1) time. Here's the pseudo-code: Break salesman into N pieces. Kick each piece to a different city.",
        '%NAME% can delete the Recycling Bin.',
        '%NAME% can overflow your stack just by looking at it.',
    ];

    public static function getRandomWithName(string $name): string
    {
        $quote = self::QUOTES[array_rand(self::QUOTES)];

        return strtr($quote, ['%NAME%' => $name]);
    }

    /**
     * @return string[]
     */
    public static function getAll(): array
    {
        return self::QUOTES;
    }
}

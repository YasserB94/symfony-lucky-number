# Symfony - Lucky number
This repository contains me following along the official symfony documentation. 

## Getting Started
- symfony check:requirements
    - Yay I got a green box!
- symfony server:start
    - Yay I see a page!
- lots of reading
    - Yaaaaauuwwwwza this one's beefy!

## Creating a Page
As I understand it we're creating a page /lucky/number that generates a random number and prints it.
### Controller
First we need a controller in the `/src` folder.
- `namespace App\Controller`
    - TODO:: [Enter the rabbithole of namespaces (Making files more hipster)](https://symfonycasts.com/screencast/php-namespaces/namespaces)
- `use Symfony\Component\HttpFoundation\Response;` I guess this will become clear over time
    - Seems like we need to send a response to a http request ? and Symfony gives us some nice magic to do it with! :D
- `class LuckyController` Yay, I get to make ~~MV~~C stuff
### Route
The controller cannot show stuff by itself. So apparently we have to configure the router to route towards the `LuckyController` and call it's `number` method
- Whoop whoop
    - My lucky number is 18! or wait, it's 22, now Symfony says its 38... Make up your mind Symfony you are starting to sound like Javascri....... Call 911 please
- TODO:: [Annotation Routes](https://symfony.com/doc/current/page_creation.html) - Let's do this later, find out the ?easier? way to define the routes
- **Aww, PHP is love**
    - Goodbye fiddly xdebug, hello built in debugging tools!
        - `php bin/console` is a powerfull built in debugging tool!
        - `php bin/console debug:router` Shows the route I just made Wauwie
### The Web Debug Toolbar: Debugging Dream
OH Am G - I don't even need the CLS ? 
okay, I ran ahead of myself and had to check this out, no idea howmany things I just installed (about 7 it seems.)
```composer require symfony/profiler-pack``` Just added this nice little bar on the bottom of the page showing some juicy information! Noice

### Rendering a Template
Awkay, I am guilty I wrote some insanely semantic HTML in the response body of the controller. 
Time to find out what PHP developpers call Fun with [Twig](https://twig.symfony.com/)...
- ```composer require twig``` to install
Aand refactor some code....
Okay, it's time to improve my IDE to handle Symfony without blinding me....
- I got Community Material Theme to improve contrast
- I already had everything setup to develop php (I guess if I did not I should not have touched symfony)
- Theres a namespace resolver extension, you have to love the vsCode Community!
- Aaand We have Twig support, autocomplete aswell! <3
- TODO:: [Learn more about templating!](https://symfony.com/doc/current/templates.html)
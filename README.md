# SyliusMobioTheme
SyliusMobioTheme - provide a built version of the mobio theme for the sylius store


## Running in docker

docker pull composer

docker run --rm --interactive --tty \
  --volume $PWD:/app \
  composer <command>

e.g

docker run --rm --interactive --tty \
  --volume $PWD:/app \
  composer install


## How i created this repo
See main instructions here; https://docs.sylius.com/en/1.12/book/themes/bootstrap-theme.html

1. make empty repo
2. run docker
3. docker pull composer
4. docker run --rm --interactive --tty --volume $PWD:/app composer require sylius/bootstrap-theme
5. copied all files from vendor/sylius/bootstrap-theme into ./themes/mobio/*

## How we build components
1. Take figma component
1. Create it in html , css, javascript where required
1. Get component to run in story book and review it with mobio - https://github.com/forge-labs-uk/mobio-storybook and once merged see it online at https://forge-labs-uk.github.io/mobio-storybook/?path=/docs/example-button--docs
1. Once a review is completed you can bring the component into the theme

## How we turn storybook components into sylius theme elements
1. look at storybook and get the code from storybook for your new component or element
1. Simply drop static assets into ./themes/mobio/js , and 'media' and 'scss' and modify 'app.js' as you need. 
1. Open ./themes/mobio/SyliusShopBundle and find the template you're overriding - modify the *.html.twig file with twig, php, html
1. Save it 
1. In order to test your changes you might want to run SyliusStandard locally and clone this theme directory into your local install so you can test it works
1. Once you have things working, commit to a branch and push
1. Create a merge request on github and ask for a reviewer from @TakesTheBiscuit or @jballzz
1. We merge
1. We will release tag the repo
1. We can then rebuild production store which will pull the theme in and be visible on an environment


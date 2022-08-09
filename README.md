# Is-Your-Name
An oversimplified PHP application which appears as an "under construction" site, but it has secrets underneath. Secrets that are VERY easy to find if you know try to reverse engineer a website it even slightly.

## So what does it do?
The user opens the website. Under construction. But under div#construction is a form. It will ask the persons name. The button will ask if their name is the same as $name. Then based on that, will show and that'll show text based on that. And play music.

## Configuration ($name, $yes, $no)
They're all configured from files of pure text, since I didn't want to install a library to handle a .env file, and I also didn't want to program a function for it myself because I'm already overcommiting SO hard to a thing that only I will find funny.

Configure: 
    $name is the name the user will compare theirs to. Configure it in a file called `name.puretext`, case insensitive
    $yes is what will show if the names are the same. Configure it in a file called `is.thesame`
    $no is what will be show if the names aren't the same. Configure it in a file called `isnot.thesame`

## License

This project is licensed under the [MIT license](LICENSE).

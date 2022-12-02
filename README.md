# Since

Since is a tracker to see when you did things and how often you did them in total. I call these things "entries" and when they happen is an "occurance".

It can be used for questions as the following:

- When did I last go to the dentist?
- When did I last clean my windows?
- How often did I watch "Groundhog Day" and when was the last time?

## Features

- You can save entries with a short title
- You can see how much time has passed since you did an entry the last time
- You can enter a new occurance of an entry
- You can see how often you did a specific thing

## Roadmap

The following features are planned, but I will do it on my own schedule and will not give any estimation.

- You can edit an entry
- You can delete an entry
- You can add a comment to an entry

## Limitations

These are the limitations of "Since". "Since" is intended to be simple software and I'm not planning to remove these limitations. 

- You can only see the time that passed since the last occurance (so you cannot answer e.g. this question: "When did I go to the dentist before the last time?")
- You cannot share or collaborate on entries with someone else

## Install locally

You can remix this app and host it yourself.
The app is based on Laravel (PHP) with Tailwind CSS for the user interface.

- `git clone $REPO`
- `composer install`
- `php artisan migrate`
- `npm run dev` (and open the link given)


## License

This app and all used libraries are published under the MIT license.
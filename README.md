# Henge 2 (now in Laravel)

## Basic Layout

Copied basic layout from Henge Egg. Use Alpine via Livewire to implement the interactivity needed by the Tailwindcss nav components.

## Next Steps

* Implement static Sarsens for guest access
* Move login/out to nav and pull right (see tw example original) - done
* Maybe nav menu needs to be injected from other views
* Year group links (maybe at the top?) could go to Henge pebbles (tried it OKish)

## Login with Microsoft

I think the example I had working on pinkysbrain is now quite outdated. There is an alternative package called Laravel Microsoft Graph:

https://dcblog.dev/docs/laravel-microsoft-graph/v3/msgraph/login-with-msgraph

It might offer more modern way to do it and some learning oppos along the way.
Remove the Microsoft package before you start!

However, it does include a dependency on a library by some lot calling themselves Shitware Ltd. Now, it might be great, but the name does not inspire confidence!

I think I've  now found the docs to the MS one. Not easy to follow, though.

Honestly, it looks liek the link at the top has the most accessible approach to doing what I'd like. Back to it.

It works! And with a single tenant app, something I never had in Henge Egg. There will be some tidying up to do before testing on the school server.

In particular, I need to support users who log in the other way(s).

## Working on Livewire

Doing the "Livewire 3 from Scratch" Laracast with Jeremy McPeak.
Up to USING FULL PAGE COMPONENTS Ep 7 just before creating the full page comp at about halfway. Finished that 24/02.

Watched the next episode where Jeremy moved the search feature to the layout so that you can search from any page. It was mainly to demonstrate breaking the component down and how to pass data between components and others nested inside them. It is probably worth doing, though might not translate into a useful feature for Henge.
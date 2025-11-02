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

Honestly, it looks like the link at the top has the most accessible approach to doing what I'd like. Back to it.

It works! And with a single tenant app, something I never had in Henge Egg. There will be some tidying up to do before testing on the school server.

In particular, I need to support users who log in the other way(s).

## Working on Livewire

Doing the "Livewire 3 from Scratch" Laracast with Jeremy McPeak.
Up to USING FULL PAGE COMPONENTS Ep 7 just before creating the full page comp at about halfway. Finished that 24/02.

Watched the next episode where Jeremy moved the search feature to the layout so that you can search from any page. It was mainly to demonstrate breaking the component down and how to pass data between components and others nested inside them. It is probably worth doing, though might not translate into a useful feature for Henge.

26/2 Just moved it on a bit by reviewing which layout each of the working pages is using.

I'm still not sure about the universal search and how it fits with my prototype layout. It looks like Jeremy is only going to have livewire components, so the trad controller routes and views won't appear in his demo app. Current thought: go with that and work from the app.layout.php. Maybe put the 'universal search' under the nav bar for now.

02/03 Up to the end of 'Using Events' which look amazing. Livewire and Alpine.js working in perfect harmony. I learned how to give Livewire components reactive properties, how to nest components and send both static and dynamic data to them (basically, the Blade way). Then how to dispatch events and respond to them with Alpine.

20/03 Wow a long gap. Sorry Laracasts, I've been ignoring you. Nevertheless, with a few useful notes of my own to read, I've got back into it pretty easily. The process here seems to one of replacing traditional views and controllers with Livewire components. So now Jeremy is creating an index view with a suitable Livewire php class and Blade based view. Oh, and the previous lesson was on `wire:navigate` a sort of prefetching way to get link data and slotting it in. That looks cool and really improves the feel of the app - more like a SPA, as Jeremy says. The key takeways from 'Iterating Over Collections' seems to be to avoid binding the index data to a property of the view in the index class (controller as was). It is better to have that in the render method, not the mount. In the search component, it is OK to bind it in the appropriate place (if bind is the right word). That is when you need to do the search, in this case when the pupil search text changes.

24/03 Building Admin Dashboard. I didn't go for the alternative layout and table based list of 'articles' (in my case users). I think I'll remember how to do that when needed. I need my design ideas for the basic app and any admin area - taking it from Henge as it is should work OK. I tried out the `#[Title]` Livewire class attribue and figured out where to put that (for single page components) in the the layout. I also implemented the delete function in my PupilIndex component. I don't think I'll need it exactly like that but it was a good way to try out the `wire:click` and `wire:confirm` attributes.

Using Form Objects - watched but not implemented (beyond the link). Had a bit of trouble with route ordering. See that any route with a {catchall} will catch a specificly stated route that matches unless the more specific one is above it in the routes file. For example `/pupils/{pupil}` needs to be below anything like `/pupils/create`.


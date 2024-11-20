<?php
/*
#React context 
> Share value and state across your component
> Object
  - Provider (দাতা)
  - Consumer (গ্রহীতা)
> Reduces propdrilling
_______________________
#Observer | => Try to avoid this use
  - Mutation Observer : interface provides the ability to watch for changes being made to the DOM tree. = https://developer.mozilla.org/en-US/docs/Web/API/MutationObserver
  - Intersection Observer : The Intersection Observer API provides a way to asynchronously observe changes in the intersection of a target element with an ancestor element or with a top-level document's viewport. = https://developer.mozilla.org/en-US/docs/Web/API/Intersection_Observer_API
> a JavaScript library for building user interfaces,
> where changes in data should automatically update parts of the user interface.
> allows us to check if an element is visible in the viewport or not.
> The viewport could be the whole window, or any parent element relative to the target element.learn more = https://developer.mozilla.org/en-US/docs/Web/API/Intersection_Observer_API.
>Commonly Used : Event Listeners, State Management, Reactive Programming Libraries & React’s useEffect and useState hooks often work like an observer pattern
______________________
#React Suspense
> React suspense is react-16 in under carpet and more power full to out carpet in react-18
> Data Fetching Patterns in React
  - Fetch on Render
  - Fetch then Render
    -- A bunch of head aches --
    ---Maintain a Loading state
    ---Data Fetching as an Effect
    ---React does not know we are making an async call
  - Render while Fetch (react suspense) | best on this time
    -- Imperative vs Declarative --
    -- Imperative programming = What need to be done | How need to be done
    -- Declarative programming = What need to be done in a declarative way we know like in a descriptive way
    programe takes care of it and it actually has own level of abstraction and it does it for you react by itself.
    ---
  -
> handle asynchronous operations like data fetching in a declarative way. 
> Suspense allows you to "pause" rendering components until data or other resources are ready
> This makes it easier to manage loading states and improves the user experience 
___________________________
#React virtul/Virtualization 
> The @tanstack/react-virtual adapter is a wrapper around the core virtual logic.
> Improving Scrolling Performance, Minimizing Re-renders, Reducing DOM Nodes


___________________________
#Class base React Lifecycle |+> https://www.geeksforgeeks.org/explain-lifecycle-methods-of-react-components/
> 1. Mounting: Mounting is the stage of rendering the JSX returned by the render method itself. the component is mounted on the DOM and rendered for the first time on the webpage.
  - componentWillMount(): before the render() function is executed for the first time
    --
  - componentDidMount(): after the render() function is executed for the first time.
    --
> 2. Updating: Updating is the stage when the state of a component is updated and the application is repainted. some user events such as clicking, pressing a key on the keyboard, etc.
  - componentWillRecieveProps(): is passed the new set of Props which may or may not be identical to the original Props.
  - setState(): is used to update the State of a component. can be invoked explicitly at any instant. 

  - shouldComponentUpdate(): component re-render only when there is a change in the state or props. 
  - componentWillUpdate(): once before the render() function is executed after the updation of State or Props.
  - componentDidUpdate(): once after the render() function is executed after the updation of State or Props.
    --
> 3. Unmounting: This is the final phase of the lifecycle of the component. where the component is removed from the page.
  - componentWillUnmount(): This function is invoked before the component is finally unmounted from the DOM i.e. this function gets invoked once before the component is removed from the page and this denotes the end of the lifecycle.
> 
> 
> 
> 








*/
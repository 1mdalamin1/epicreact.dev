<?php
/*
Helpful Emoji 🐨 💰 💯 📝 🦉 📜= Document 💣 💪 🏁 👨‍💼= Manager 🚨= Alert 🐳= Docker 🎣= Hooks 🚀= EpicReact.Dev
====================================
### React
1. Class base = divi 4
2. function base = divi 5

====================================
setup process
--------------------
git clone https://github.com/kentcdodds/react-hooks.git  
cd react-hooks  
node setup || npm run setup --silent
npm start
--------------------
docker-compose up | If you are still unable to fix issues and you know how to use Docker 🐳 you can setup the project with the following command:
___________________________
1. Done
2. Done | React Fundamentals (https://github.com/kentcdodds/react-fundamentals)
3. Done | 🎣 React Hooks 🚀 EpicReact.Dev (https://github.com/kentcdodds/react-hooks.git) 
4. Done | 🔥 Advanced React Hooks 🚀 git clone https://github.com/kentcdodds/advanced-react-hooks.git  
5. Done | 💪 Advanced React Patterns 🤯 git clone https://github.com/kentcdodds/advanced-react-patterns.git  
6.  |⚡ React Performance 🚀 git clone https://github.com/kentcdodds/react-performance.git  
7.  | 🧐 Testing React Applications 🚀 git clone https://github.com/kentcdodds/testing-react-apps.git  
8.  | 🔀 React Suspense 🚀 https://github.com/kentcdodds/react-suspense.git 
9. Runing... | (bookshelf) Build an Epic React App https://github.com/kentcdodds/bookshelf.git
10.
    
hook-flow.png (need again study) | => https://github.com/donavon/hook-flow | https://www.epicreact.dev/modules/react-hooks-v1/hooks-flow

Comparison to Lifecycle Methods (Class vs Function)

======================================

#React context |=> In React, prop drilling and Context API are two ways to manage state:
> Share value and state across your component
> Used for managing state across many components easily. It's ideal for global or application-wide state, deep component nesting, and cross-component communication.
> Object
  - Provider (দাতা)
  - Consumer (গ্রহীতা)
> Reduces prop drilling
_______________________
#Observer | => Try to avoid this use
  - Mutation Observer : interface provides the ability to watch for changes being made to the DOM tree. = https://developer.mozilla.org/en-US/docs/Web/API/MutationObserver
  - Intersection Observer : The Intersection Observer API provides a way to asynchronously observe changes in the intersection of a target element with an ancestor element or with a top-level document's viewport. = https://developer.mozilla.org/en-US/docs/Web/API/Intersection_Observer_API
> a JavaScript library for building user interfaces,
> where changes in data should automatically update parts of the user interface.
> allows us to check if an element is visible in the viewport or not.
> The viewport could be the whole window, or any parent element relative to the target element.learn more = https://developer.mozilla.org/en-US/docs/Web/API/Intersection_Observer_API.
>Commonly Used : Event Listeners, State Management, Reactive Programming Libraries & React’s useEffect and useState hooks often work like an observer pattern
> - Need to see a full carse course
______________________
#React Suspense
> React suspense is react-16 in under carpet and more power full to out carpet in after react-18
> Suspense allows you to "pause" rendering components until data or other resources are ready
> This makes it easier to manage loading states and improves the user experience 
> Handle asynchronous operation like data fetching in a declarative way.
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
    program takes care of it and it actually has own level of abstraction and it does it for you react by itself.
    ---
  -
___________________________
#React virtul/Virtualization 
> The @tanstack/react-virtual adapter is a wrapper around the core virtual logic.
> Improving Scrolling Performance, Minimizing Re-renders, Reducing DOM Nodes


___________________________
#Class based React Lifecycle |+> https://www.geeksforgeeks.org/explain-lifecycle-methods-of-react-components/
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

> component based Or class based
___________________________
#function based React Lifecycle 
> useState()
> useEffect()
  - one-time render
  - continues to render
  - specific event render
> 


*/

// useEffect: persistent state
// http://localhost:3000/isolated/exercise/02.js

import * as React from 'react'

function Greeting({initialName = ''}) {

  // Initialize the state with a value from localStorage if it exists, or fall back to initialName
  const [name, setName] = React.useState(() => {
    return window.localStorage.getItem('name') || initialName;
  })

  // Update localStorage whenever the name state changes
  React.useEffect(()=>{
    window.localStorage.setItem('name', name)
  }, [name])

  function handleChange(event) {
    setName(event.target.value)
  }
  return (
    <div>
      <form>
        <label htmlFor="name">Name: </label>
        <input value={name} onChange={handleChange} id="name" />
      </form>
      {name ? <strong>Hello {name}</strong> : 'Please type your name'}
    </div>
  )
}

function App() {
  return <Greeting initialName={'Tanvir Hasan'} />
}

export default App

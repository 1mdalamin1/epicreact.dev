// Basic Forms
// http://localhost:3000/isolated/exercise/06.js

import * as React from 'react'

function UsernameForm({onSubmitUsername}) {

  let nameUser = React.useRef()
  let [error, setError] = React.useState(null)

  // 🐨 add a submit event handler here (`handleSubmit`).
  function handleSubmit(event) {
    event.preventDefault();
    
    // alert('Yes onClick');
    // console.log(event);
    let useName = event.target[0].value
    // let useName = nameUser.current.value
  
    // console.log(' ref value '+nameUser.current.value+" ___ ");
    // console.log(nameUser);
    
    onSubmitUsername(useName);

  }
  
  // events (which refreshes the page).
  // 📜 https://developer.mozilla.org/en-US/docs/Web/API/Event/preventDefault
  
  // handal validation & useState
  function handleChange(event){
    let value = event.target.value

    let isLowerCase = value === value.toLowerCase() 
    setError(isLowerCase ? null : 'Input must be lower case')
  }

  return (
    <form onSubmit={handleSubmit}>
      <div>
        <label>Username:</label>
        <input type="text" name="username" ref={nameUser} onChange={handleChange} />
      </div>
      <div style={{color: 'red'}}>{error}</div>
      <button type="submit" disabled={Boolean(error)} >Submit</button>
    </form>
  )
}

function App() {
  const onSubmitUsername = username => alert(`You entered: ${username}`)
  return <UsernameForm onSubmitUsername={onSubmitUsername} />
}

export default App

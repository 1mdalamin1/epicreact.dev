// Filename - index.js

import React, { useState, useEffect } from 'react';
import ReactDOM from 'react-dom';

function Test() {
  const [hello, setHello] = useState("Wake Up Bangladesh!"); // Equivalent to this.state.hello

  // Mimic `componentWillMount()` (runs before the component is mounted)
  useEffect(() => {
    console.log("componentWillMount()");
  }, []); // This runs once, during mounting.

  // Mimic `componentDidMount()` (runs after the component is mounted)
  useEffect(() => {
    console.log("componentDidMount()");
  }, []); // Empty dependency array ensures this runs only once, after mounting.

  // Mimic `shouldComponentUpdate()` (decision on re-renders)
  // Since React function components re-render based on state/prop changes,
  // you can use `React.memo` or conditional logic to optimize updates.

  // Mimic `componentDidUpdate()` (runs after state updates)
  useEffect(() => {
    if (hello !== "Long live the revolution.") {
      console.log("componentDidUpdate()");
    }
  }, [hello]); // Runs only when `hello` changes.

  // Mimic `componentWillUpdate()` (React function components do not have a direct equivalent)
  // You can log before updating inside the `setHello` handler.

  const changeState = () => {
    console.log("componentWillUpdate()");
    setHello("Tanvir md Al Amin!");
  };

  return (
    <div>
      <h1>vir-za.com, Hi {hello}</h1>
      <h2>
        <a onClick={changeState}>Press Here!</a>
      </h2>
    </div>
  );
}

ReactDOM.render(<Test />, document.getElementById('root'));

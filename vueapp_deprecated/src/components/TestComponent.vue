<template>
    <div>
      <h3>This is a test component with a single prop below:</h3>
      <p>{{ msg }}</p>
    </div>
  </template>
  
  <script>
  export default {
    name: 'TestComponent',
    props: {
      msg: String
    }
  }
  </script>
  
  <!-- Add "scoped" attribute to limit CSS to this component only -->
  <style scoped>
  h3 {
    margin: 40px 0 0;
  }
  </style>
  
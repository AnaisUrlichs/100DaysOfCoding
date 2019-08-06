<template>
  <div id="root">
    Sign-up
    <br />
    <p v-once>{{email}}</p>
    <p v-text="email"></p>
    <br />
    <input v-model="email" :class="{red: email.length < 2}" />
    <br />
    <button onclick="alert('signed up')" :disabled="email.length < 2 ">Submit</button>
  </div>
</template>

<script>
export default {
  el: "#root",
  data: function() {
    return {
      email: ""
    };
  }
};
</script>

<style>
* {
  margin: 0;
  padding: 0;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

.red {
  border: 2px solid red;
}

.green {
  border: 2px solid greed;
}
</style>

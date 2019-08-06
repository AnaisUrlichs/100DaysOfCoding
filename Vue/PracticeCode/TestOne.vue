<template>
  <div id="app">
    <div v-if="count === 0">Green</div>
    <div v-else-if="count === 1">Green</div>
    <div v-else>No data provided</div>

    <div v-show="count === 3">This is a lucky number</div>

    <div>
      <p>{{count}}</p>
      <input type="text" v-model="count" />
      <input type="submit" />
    </div>
  </div>
</template>

<script>
export default {
  el: "#app",
  data: function() {
    return {
      count: 3
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
</style>

<template>
  <div id="app">
    {{kittifyName}}
    <input v-model="NewCat" v-on:keyup.enter="addKitty" />
    <button v-on:click="addKitty">Add</button>
    <ul>
      <li v-for="cat in cats">{{ cat.name | capitalize }}</li>
    </ul>
  </div>
</template>

<script>
import CatList from "./components/CatList";

export default {
  el: "#app",
  components: [
    CatList
  ],
  data: function() {
    return {
      cats: [{ name: "Mango" }, { name: "Flo" }],
      newCat: ""
    };
  },
  methods: {
    addKitty: function() {
      this.cats.push({ name: this.newCat });
      this.newCat = "";
    }
  },
  filters: {
    capitalize: function(value) {
      return value.toUpperCase();
      }
  },
  computed: {
    kittifyName: function(value) {
      if (this.newCat.length > 1) {
        return this.newCat + 'y'
      }
    }
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

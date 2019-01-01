<template>
  <div id="app">

    <nav>
      <router-link to="/">Home</router-link><br>
      <router-link to="/about">about</router-link>
    </nav>

    <router-view />

  </div>
</template>

<script>
import Skills from './components/Skills.vue'

export default {
  name: 'app',
  components: {
    Skills
  }
}
</script>

<style>
  body {
    background: #eee;
    font-family: sans-serif;
  }
</style>

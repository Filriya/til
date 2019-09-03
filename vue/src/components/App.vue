<template lang="pug">
  div  
    counter
    hello
</template>

<script>
import Counter from './Counter'
import Hello from './Hello'

export default {
  components: {
    Counter: Counter,
    Hello: Hello
  }
}
</script>

<style scoped>
  p {
    border: 1px solid red;
  }
</style>

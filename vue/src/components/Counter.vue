<template lang="pug">
  div
    button(v-on:click="decrement") -
    span {{ count }}
    button(v-on:click="increment") +
</template>


<script>
export default {
  data() {
    return {
      count: 0,
    }
  },
  methods: {
    increment() {
      this.count += 1
    },
    decrement() {
      this.count -= 1
    },
  }
}
</script>

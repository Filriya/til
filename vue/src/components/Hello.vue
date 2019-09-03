<template lang="pug">
  div 
    div {{ message }}
    input(v-model="message")
    ul 
      li(v-for="item in list") {{ item }}
    button(@click="handleClick") Click me
    div(v-if="show") Show!
    div(:text-content.prop="test_string")
</template>

<script>
export default {
  data() {
    return {
      message: "Hello World",
      list: ["カープ", "ジャイアンツ", "ベイスターズ"],
      show: true,
      test_string: "test-content",
    }
  },
  methods: {
    handleClick: function(event) {
      if(this.show) {
        this.show = false
      } else {
        this.show = true
      }
    }
  }

}
</script>


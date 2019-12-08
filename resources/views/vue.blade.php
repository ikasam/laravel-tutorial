@verbatim
<div id="app">
  <p>Original mesage: "{{ message }}"</p>
  <p>Computed reversed mesage: "{{ reversedMessage }}"</p>
  <input v-model="message">
</div>

<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script>
var obj = {
  foo: 'bar'
}

vm = new Vue({
  el: '#app',
  data: {
    message: 'Hello Vue!'
  },
  computed: {
    reversedMessage: function () {
      return this.message.split('').reverse().join('')
    }
  }
})

Object.freeze(vm.data)

</script>
@endverbatim

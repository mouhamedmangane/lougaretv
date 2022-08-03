<template>
  <div :class="{'text-grenn-600':status,'text-red-600':!status}">
      <div v-for="item in messageItem" >
          {{item}}
      </div>
  </div>
</template>

<script>
export default {
    props:['status','messageItem'],
    methods:{

    }
}
</script>

<style>

</style>

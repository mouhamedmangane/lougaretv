<template>
    <paragraphe :size="m.size">
        {{m.text}}dfdf
    </paragraphe>
</template>

<script>
import Paragraphe from '../Text/Paragraphe.vue'
export default {
  components: { Paragraphe },
    props:['m'],
}
</script>

<style>

</style>

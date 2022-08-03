<template>
    <paragraphe :size="model.size">
        {{model.text}}
    </paragraphe>
</template>

<script>
import Paragraphe from '../Text/Paragraphe.vue'
export default {
  components: { Paragraphe },
    props:['model'],
}
</script>

<style>

</style>

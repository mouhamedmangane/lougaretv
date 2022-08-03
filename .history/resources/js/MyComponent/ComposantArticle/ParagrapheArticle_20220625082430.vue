<template>

    <paragraphe :size="m.size" class="my-4">
        {{m.text}}
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

<template>
    <a :href="url">
        <span v-if="icon">
            <material-icon nom="icon"/>
        </span>
        <span>{{nom}}</span>

    </a>
</template>

<script>
import MaterialIcon from '../Icons/MaterialIcon.vue'
export default {
  components: { MaterialIcon },
    props:['url','nom','icon']
}
</script>

<style>

</style>

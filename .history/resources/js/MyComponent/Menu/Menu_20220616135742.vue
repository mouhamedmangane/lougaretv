<template>
    <div>
        <nav class="container">
            <ul class="list-none">
                <menu-item v-for="txt in elements"  :text="txt" />
            </ul>

        </nav>
    </div>
</template>

<script>
import MenuItem from './MenuItem.vue'
export default {
  components: { MenuItem },
    props:['nom'],
    data(){
        return{
            elements:[
                'Actualité','Politique','Poeple','Religion','Société','Sport','Vidéo'
            ]
        }
    }
}
</script>

<style>

</style>

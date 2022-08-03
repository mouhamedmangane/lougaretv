<template>
    <div>
        <nav class="">
            <ul class="">
                <li>msjfml</li>
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
        return {
            elements:[
                'Actualité','Politique','Poeple','Religion','Société','Sport','Vidéo'
            ]
        };
    }
}
</script>

<style>

</style>

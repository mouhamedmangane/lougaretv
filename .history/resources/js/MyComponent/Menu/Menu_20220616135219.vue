<template>
    <div>
        <nav class="container">
            <ul class="list-none">

            </ul>

        </nav>
    </div>
</template>

<script>
export default {
    props:['nom'],
    data(){
        return{
            element:[
                'Actualité','Politique','Poeple','Religion','Société','Sport','Vidéo'
            ]
        }
    }
}
</script>

<style>

</style>

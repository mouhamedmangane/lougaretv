<template>
   <i class="material-icons">{{nom}}</i>
</template>

<script>
export default {
    props:['nom','type'],
    computed:{
        finalClass(){
            if(this.type=="oulined"){
                return 'material-icons-outlined';
            }
            return "material-icons";
        }
    }
}
</script>

<style>

</style>

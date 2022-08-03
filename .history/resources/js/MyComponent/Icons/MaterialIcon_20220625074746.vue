<template>
   <i :class="finalClass">{{nom}}</i>
</template>

<script>
export default {
    props:['nom','type'],
    computed:{
        finalClass(){
            if(this.type=="outlined"){
                return 'material-icons-outlined';
            }
            return "material-icons";
        }
    }
}
</script>

<style>

</style>

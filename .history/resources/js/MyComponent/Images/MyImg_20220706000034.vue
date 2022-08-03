<template>
<div :class="[classBloc,'  rounded']">
    <img :src="src" :alt="alt" :class="[classImage,' object-cover w-full  z-10  rounded']">
</div>
</template>

<script>
const classImageConst={
    'hpm':{
       'bloc':'max-w-fit max-h-fit   ',
        'image':'h-[112px] h-[93.3px] h-full'
    },
    'pm':{
        'bloc':'max-w-32 aspect-[3/2.5]',
        'image':'h-full'
    },
    'pmp':{
        'bloc':'max-w-64 w-full 2xl:w-64  ',
        'image':''
    },
    'mm':{
        'bloc':'max-w-fit w-[17rem] ',
        'image':''
    },
    'mmv':{
        'bloc':'h-64 ',
        'image':''
    },
    'mmp':{
        'bloc':'w-full',
        'image':'aspect-[3/2]'
    },
    'gm':{
        'bloc':'w-full',
        'image':'h-full'
    },
    'gmp':{
        'bloc':'w-full',
        'image':'aspect-[3/1.69]'
    },

}
export default {
    props:['size','src','alt'],
    computed:{
        classImage(){
            console.log(this.size);
            return classImageConst[this.size]['image'];
        },
        classBloc(){
            return classImageConst[this.size]['bloc'];
        }
    }
}
</script>

<style>

</style>

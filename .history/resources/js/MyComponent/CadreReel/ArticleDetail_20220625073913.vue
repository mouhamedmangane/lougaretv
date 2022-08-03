<template>
    <div>
        <h1 class="my-3 text-4xl font-bold">{{model.titre}}</h1>
        <div class=" flex items-center text-neutral-500">
            <div class="flex items-center">
                <material-icon nom="schedule" class="" />
                <span class="">{{model.date}}</span>
            </div>
            <div class="flex items-center mr-3">
                 <material-icon nom="person" class="" />
                 <span class="">{{model.raporteur}}</span>
            </div>
        </div>

        <div class="flex my-4 text-neutral-600 text-xs">
             <div class="flex px-4  rounded-full border border-neutral-200">
                 <button class="flex items-center hover:bg-neutral-100 p-1">
                    <material-icon nom="add_reaction" class="mr-2" />
                    <span> Réagir</span>
                 </button>
                 <button class="flex items-center ml-6 hover:bg-neutral-100 p-1" >
                    <material-icon nom="chat_bubble_outline" class="mr-2" />
                    <span> {{model.commentaire}} commentaire</span>
                 </button>

             </div>
              <div class="flex px-4  rounded-full border border-neutral-200 ml-3">
                <button class="flex items-center hover:bg-neutral-100 p-1">
                    <material-icon nom="share" class="mr-2" />
                    <span>Partager</span>
                </button>
            </div>

            <div class="flex px-4 rounded-full border border-neutral-200 ml-3 ">
                <button class="flex items-center hover:bg-neutral-100 p-1 ">
                    <material-icon nom="turned_in_not" class="mr-2" />
                    <span> Enregistrer</span>
                </button>

            </div>
        </div>
    </div>
</template>

<script>
import MaterialIcon from '../Icons/MaterialIcon.vue'
export default {
  components: { MaterialIcon },
    data(){
        return {
            model:{
                titre:"Kidira: Un berger arrêté avec plus de 52 kg de chanvre indien",
                date:'24 juin 2022',
                raporteur:'Modou Nidaye',
                lecture:543,
                commentaire:13,
                contenu:[
                    {type:"image",size:'pm',url:"d1.jpg",titre:'Chanvre indien arreté & kidira'},
                    {type:"paragraphe",size:'pm',text:"Les éléments de la subdivision des douanes à Kidira ont réalisé un véritable coup de maître. C'est à hauteur de la rive du fleuve qu'ils ont aperçu un conducteur de moto à l’allure suspecte. La chasse à l'homme a finalement porté ses fruits."},
                    {type:"paragraphe",size:'pm',text:"Le berger Mamadou Sow originaire du village de Wouro Thierno a été interpellé. L’homme avait en sa possession une quantité de drogue d'un poids total de 52,500 Kg de chanvre. "},
                    {type:"paragrahe",size:'pm',text:"Conduits dans les locaux de la brigade des douanes, le berger a déclaré avoir pris la drogue à Diboli, un village malien frontalier avec le Sénégal et qu'il était  chargé de le transmettre à quelqu'un sans donner plus de précision. "},
                    {type:"paragrahe",size:'pm',url:"Loin d'être convaincus par ces déclarations, les douaniers l'ont placé en garde-à-vue avant d'être déféré ce vendredi au parquet de Tamba où il file tout droit vers une session de la chambre criminelle du tribunal de grande instance. "},
                    {type:"video",size:'pm',url:" "},
                ]
            }
        }
    }
}
</script>

<style>

</style>

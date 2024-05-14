<template>
    <div class="w-full flex justify-center flex-col px-0 lg:px-24 py-10">
        <div class="px-10">
            <span class="text-2xl font-bold">Olá {{ inviteCode.guest_name }}, escolha seu presente</span>

            <p class="text-sm">Agradecemos por estar conosco neste momento especial. Seu apoio e carinho são muito importantes para nós.</p>
        </div>

        <div class="mt-8 px-10">
            <span class="text-lg font-bold">
                Presentes disponíveis:
            </span>
        </div>

        <ul class="grid grid-cols-12 gap-y-5 gap-x-5 py-8">
            <li v-for="gift in gifts" :key="gift.id" class="col-span-12 md:col-span-4 flex items-center justify-center">
                <Card class="max-w-[330px] h-full">
                    <CardHeader>
                        <CardTitle>{{ gift.name }}</CardTitle>
                    </CardHeader>
                    <CardContent>
                        <div>
                            <img :src="gift.photo" :alt="gift.name" loading="lazy" class="rounded-lg object-cover h-[200px]">
                        </div>
                    </CardContent>
                    <CardFooter class="px-6 pb-6">
                        <AlertDialog>
                            <AlertDialogTrigger asChild>
                                <Button class="w-full">Presentear</Button>
                            </AlertDialogTrigger>
                            <AlertDialogContent>
                                <AlertDialogHeader>
                                    <AlertDialogTitle>Tem certeza que deseja selecionar este presente?</AlertDialogTitle>
                                    <AlertDialogDescription>
                                        Esta ação não poderá ser desfeita. Após confirmar a seleção, você receberá informações no email que forneceu anteriormente.
                                    </AlertDialogDescription>
                                </AlertDialogHeader>
                                <AlertDialogFooter>
                                    <AlertDialogCancel>Cancelar</AlertDialogCancel>
                                    <AlertDialogAction @click="selectGift(gift.id)">Confirmar</AlertDialogAction>
                                </AlertDialogFooter>
                            </AlertDialogContent>
                        </AlertDialog>
                    </CardFooter>
                </Card>
            </li>
        </ul>
    </div>
</template>

<script>
import Card from '@/Components/ui/card/Card.vue';
import CardHeader from '@/Components/ui/card/CardHeader.vue';
import CardTitle from '@/Components/ui/card/CardTitle.vue';
import CardDescription from '@/Components/ui/card/CardDescription.vue';
import CardContent from '@/Components/ui/card/CardContent.vue';
import CardFooter from '@/Components/ui/card/CardFooter.vue';
import Button from "../../Components/ui/button/Button.vue";
import Input from "../../Components/ui/input/Input.vue";
import { Label } from "@/Components/ui/label/index.js";
import AlertDialog from "@/Components/ui/alert-dialog/AlertDialog.vue";
import AlertDialogAction from "@/Components/ui/alert-dialog/AlertDialogAction.vue";
import AlertDialogCancel from "@/Components/ui/alert-dialog/AlertDialogCancel.vue";
import AlertDialogContent from "@/Components/ui/alert-dialog/AlertDialogContent.vue";
import AlertDialogDescription from "@/Components/ui/alert-dialog/AlertDialogDescription.vue";
import AlertDialogFooter from "@/Components/ui/alert-dialog/AlertDialogFooter.vue";
import AlertDialogHeader from "@/Components/ui/alert-dialog/AlertDialogHeader.vue";
import AlertDialogTitle from "@/Components/ui/alert-dialog/AlertDialogTitle.vue";
import AlertDialogTrigger from "@/Components/ui/alert-dialog/AlertDialogTrigger.vue";

export default {
    props: ['inviteCode'],
    components: {
        Label,
        Input, Button,
        Card,
        CardHeader,
        CardTitle,
        CardDescription,
        CardContent,
        CardFooter,
        AlertDialog,
        AlertDialogAction,
        AlertDialogCancel,
        AlertDialogContent,
        AlertDialogDescription,
        AlertDialogFooter,
        AlertDialogHeader,
        AlertDialogTitle,
        AlertDialogTrigger
    },
    data() {
        return {
            gifts: []
        };
    },
    mounted() {
        this.fetchGifts();
    },
    methods: {
        fetchGifts() {
            axios.get('/api/gifts').then(response => {
                console.log(response.data);
                this.gifts = response.data;
            });
        },
        selectGift(giftId) {
            this.$inertia.post(`/select-gift/${this.inviteCode.id}`, { gift_id: giftId });
        }
    }
};
</script>

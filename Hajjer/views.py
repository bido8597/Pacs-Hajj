from django.shortcuts import render

# Create your views here.
from django.template import loader
from django.views.generic.edit import CreateView, UpdateView, DeleteView

from .models import Hajjer

from django.http import HttpResponse


def index(request):
    template = loader.get_template('Hajjer/Hajjer.html')
    context = {
        'latest_question_list': 0,
    }
    return HttpResponse(template.render(context, request))


class BalanceUpdate(UpdateView):
    model = Hajjer
    fields = ['Balance', ]
    template_name_suffix = ''
    success_url = '/Hajjer/348391/update/'


from django.urls import path

from . import views

urlpatterns = [
    path('', views.index, name='index'),
    path('<int:pk>/update/', views.BalanceUpdate.as_view(), name='Balance_update'),
]
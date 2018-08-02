from django.db import models
from Hajjer import models as mp

# Create your models here.

class Store(models.Model):
    bankAccount = models.CharField(max_length=255)
    name = models.CharField(max_length=255)
    location = models.CharField(max_length=255)
    posId = models.CharField(max_length=255)


class Transaction(models.Model):
    amount = models.IntegerField()
    StoreId = models.ForeignKey(Store, on_delete=models.CASCADE)
    HajjId = models.ForeignKey(mp.Hajjer , on_delete=models.CASCADE)


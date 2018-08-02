from django.db import models

# Create your models here.
class Hajjer(models.Model):
    Name = models.CharField(max_length=500);
    RFID = models.IntegerField(primary_key=True);
    Balance = models.FloatField(default=0.0);

    def __str__(self):
        return self.Name  + " " + str(self.Balance)

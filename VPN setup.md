### Network Setups
- Set the static routes
- Set Routing tables
- Set security groups correctly (ICMP in case of i2c)
- At this point, the server should be ping-able from the static routes
- Check if the tunnel destinations are ping-able from the server
In case of i2c, telnet was needed and it was installed by setting up IGW, and removed later(stopped the server and restarted it in order to remove the public IP automatically assigned)
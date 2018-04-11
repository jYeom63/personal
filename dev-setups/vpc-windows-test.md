Refer to:    
- https://www.comparitech.com/blog/vpn-privacy/how-to-make-your-own-free-vpn-using-amazon-web-services/
- https://medium.com/@codedraken/how-to-setup-a-proxy-server-on-linux-free-76f3c465ee5e

---

1. Create Server to be a VPN in VPC(i2c)
    - security group inbound rules remain the same (for now)
2. Check if same action is available as before (curl to the url)
3. Set up Squid in the VPC server(https://www.techrepublic.com/article/how-to-install-and-configure-squid-proxy-server-on-linux/)
    - This process is needed because mere tunneling will not be sufficient for windows server to go through it
4. 
Refer to:    
- https://www.comparitech.com/blog/vpn-privacy/how-to-make-your-own-free-vpn-using-amazon-web-services/
- https://medium.com/@codedraken/how-to-setup-a-proxy-server-on-linux-free-76f3c465ee5e

---

1. Create Server to be a VPN in VPC(i2c)
    - security group inbound rules remain the same (for now)
2. Check if same action is available as before (curl to the url)
3. Set up Squid in the VPC server
    - https://github.com/oz-sysb/wasabi/issues/1417
4. Create Windows server in an accessible VPC
5. Allow Window's server's private IP address to the VPN server
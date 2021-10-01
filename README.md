# programmer-test-laravel

Build a Token System using Laravel (microservice-to-microservice)

Clone this repo and push to main branch as end result

Requirements of the system:

Models:
- TokenTransaction
    - amount
    - type (debit/credit)
    - description
    - balance
    - user_id
- User
    - name
    - email

Endpoints & Controllers:
- topup token
- use token

Middleware: 
- Authorize any request having header:
- “PcariComponentToken: Pcari$ecretTok3n!!“

*since this is a microservice-to-microservice platform, differentiate user by email only as the authentication is done using the PcariComponentToken header

Use one migration for one model (dont migrate everything in one file)


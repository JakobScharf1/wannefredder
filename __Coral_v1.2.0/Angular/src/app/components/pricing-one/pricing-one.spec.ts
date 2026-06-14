import { ComponentFixture, TestBed } from '@angular/core/testing';

import { PricingOne } from './pricing-one';

describe('PricingOne', () => {
  let component: PricingOne;
  let fixture: ComponentFixture<PricingOne>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [PricingOne]
    })
    .compileComponents();

    fixture = TestBed.createComponent(PricingOne);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

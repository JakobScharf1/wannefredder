import { ComponentFixture, TestBed } from '@angular/core/testing';

import { PortfolioModernThree } from './portfolio-modern-three';

describe('PortfolioModernThree', () => {
  let component: PortfolioModernThree;
  let fixture: ComponentFixture<PortfolioModernThree>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [PortfolioModernThree]
    })
    .compileComponents();

    fixture = TestBed.createComponent(PortfolioModernThree);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
